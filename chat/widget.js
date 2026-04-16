(function () {
  const root = document.getElementById("chatWidgetRoot");
  if (!root) return;

  const basePath = root.getAttribute("data-base-path") || "";
  const endpoint = {
    start: basePath + "chat/start.php",
    send: basePath + "chat/send.php",
    fetch: basePath + "chat/fetch.php",
  };

  const toggleBtn = document.getElementById("chatWidgetToggle");
  const closeBtn = document.getElementById("chatWidgetClose");
  const panel = document.getElementById("chatWidgetPanel");

  const leadForm = document.getElementById("chatLeadForm");
  const leadSubmit = document.getElementById("chatLeadSubmit");
  const leadError = document.getElementById("chatLeadError");

  const conversationBox = document.getElementById("chatConversation");
  const messageList = document.getElementById("chatMessageList");
  const sendForm = document.getElementById("chatSendForm");
  const messageInput = document.getElementById("chatMessageInput");
  const sendBtn = document.getElementById("chatSendBtn");

  let conversationId = null;
  let lastMessageId = 0;
  let pollingTimer = null;

  function escapeHtml(str) {
    const div = document.createElement("div");
    div.textContent = String(str || "");
    return div.innerHTML;
  }

  function formatTime(dt) {
    if (!dt) return "";
    const d = new Date(String(dt).replace(" ", "T"));
    if (Number.isNaN(d.getTime())) return dt;
    return d.toLocaleString("vi-VN");
  }

  function showLeadForm() {
    leadForm.style.display = "grid";
    conversationBox.style.display = "none";
  }

  function showConversation() {
    leadForm.style.display = "none";
    conversationBox.style.display = "flex";
  }

  function appendMessage(msg) {
    const empty = messageList.querySelector(".chat-message-empty");
    if (empty) empty.remove();

    const item = document.createElement("div");
    item.className =
      "chat-msg " + (msg.sender_type === "admin" ? "admin" : "guest");
    item.innerHTML =
      "<div>" +
      escapeHtml(msg.message) +
      "</div>" +
      '<div class="chat-msg-time">' +
      escapeHtml(formatTime(msg.created_at)) +
      "</div>";
    messageList.appendChild(item);

    lastMessageId = Math.max(lastMessageId, Number(msg.id || 0));
    messageList.scrollTop = messageList.scrollHeight;
  }

  function renderMessages(messages, reset) {
    if (reset) {
      messageList.innerHTML = "";
      lastMessageId = 0;
    }

    if (!Array.isArray(messages) || messages.length === 0) {
      if (reset) {
        messageList.innerHTML =
          '<div class="chat-message-empty">Chưa có tin nhắn.</div>';
      }
      return;
    }

    if (reset) {
      messageList.innerHTML = "";
    }

    messages.forEach(appendMessage);
  }

  function fetchConversation(appendOnly) {
    let url = endpoint.fetch;

    const params = [];
    if (conversationId)
      params.push("conversation_id=" + encodeURIComponent(conversationId));
    if (appendOnly && lastMessageId > 0)
      params.push("after_id=" + encodeURIComponent(lastMessageId));
    if (params.length) url += "?" + params.join("&");

    return fetch(url, { credentials: "same-origin" })
      .then(function (res) {
        return res.json();
      })
      .then(function (data) {
        if (!data.success) return;

        if (!data.has_conversation || !data.conversation) {
          conversationId = null;
          showLeadForm();
          return;
        }

        conversationId = Number(data.conversation.id);
        showConversation();
        renderMessages(data.messages || [], !appendOnly);
      })
      .catch(function () {});
  }

  function startPolling() {
    if (pollingTimer) clearInterval(pollingTimer);
    pollingTimer = setInterval(function () {
      if (!conversationId) return;
      fetchConversation(true);
    }, 3000);
  }

  toggleBtn.addEventListener("click", function () {
    root.classList.toggle("open");
    panel.setAttribute(
      "aria-hidden",
      root.classList.contains("open") ? "false" : "true",
    );

    if (root.classList.contains("open")) {
      fetchConversation(false);
      startPolling();
    }
  });

  closeBtn.addEventListener("click", function () {
    root.classList.remove("open");
    panel.setAttribute("aria-hidden", "true");
  });

  leadForm.addEventListener("submit", function (event) {
    event.preventDefault();
    leadError.textContent = "";

    const formData = new FormData(leadForm);
    const payload = new URLSearchParams();
    payload.set(
      "guest_name",
      (formData.get("guest_name") || "").toString().trim(),
    );
    payload.set(
      "guest_phone",
      (formData.get("guest_phone") || "").toString().trim(),
    );
    payload.set("message", (formData.get("message") || "").toString().trim());

    if (
      !payload.get("guest_name") ||
      !payload.get("guest_phone") ||
      !payload.get("message")
    ) {
      leadError.textContent = "Vui lòng nhập đầy đủ thông tin.";
      return;
    }

    leadSubmit.disabled = true;

    fetch(endpoint.start, {
      method: "POST",
      credentials: "same-origin",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
      },
      body: payload.toString(),
    })
      .then(function (res) {
        return res.json();
      })
      .then(function (data) {
        if (!data.success || !data.conversation) {
          throw new Error(data.message || "Không thể bắt đầu cuộc trò chuyện.");
        }

        conversationId = Number(data.conversation.id);
        showConversation();
        renderMessages(data.messages || [], true);
        leadForm.reset();
        messageInput.focus();
      })
      .catch(function (error) {
        leadError.textContent =
          error.message || "Không thể bắt đầu cuộc trò chuyện.";
      })
      .finally(function () {
        leadSubmit.disabled = false;
      });
  });

  sendForm.addEventListener("submit", function (event) {
    event.preventDefault();
    if (!conversationId) return;

    const message = messageInput.value.trim();
    if (!message) return;

    sendBtn.disabled = true;

    const payload = new URLSearchParams();
    payload.set("conversation_id", String(conversationId));
    payload.set("message", message);

    fetch(endpoint.send, {
      method: "POST",
      credentials: "same-origin",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
      },
      body: payload.toString(),
    })
      .then(function (res) {
        return res.json();
      })
      .then(function (data) {
        if (!data.success || !data.message) {
          throw new Error(data.message || "Không thể gửi tin nhắn.");
        }
        if (data.conversation_id) {
          conversationId = Number(data.conversation_id);
        }
        appendMessage(data.message);
        messageInput.value = "";
      })
      .catch(function (error) {
        alert(error.message || "Không thể gửi tin nhắn.");
      })
      .finally(function () {
        sendBtn.disabled = false;
        messageInput.focus();
      });
  });

  // Tải trạng thái hội thoại sẵn có nhưng không tự bật panel.
  fetchConversation(false);
})();
