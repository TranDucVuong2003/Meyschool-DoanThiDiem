<!-- Section: CTA Đăng ký tư vấn -->
<section id="lien-he" class="tq-footer-consult-wrap">
    <div class="tq-footer-consult-inner">
        <div class="tq-footer-consult-card" data-aos="zoom-in-up">
            <div class="tq-footer-consult-content">
                <div class="tq-footer-consult-text">
                    <div>
                        <small>Tuyển sinh 2026 - 2027</small>
                        <h3>Đăng ký tư vấn</h3>
                    </div>
                    <p>Liên hệ ngay để được tư vấn chi tiết lộ trình học phù hợp cho con.</p>
                </div>
                <div class="tq-footer-consult-actions">
                    <a href="lien-he.php" class="tq-footer-consult-btn">Liên hệ ngay</a>
                    <div class="tq-footer-consult-note">Phản hồi trong vòng 24 giờ làm việc</div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
.tq-footer-consult-wrap {
    /* margin-top: 120px; */
    --tq-consult-half-height: 92px;
    position: relative;
    z-index: 5;
    margin: calc(-1 * var(--tq-consult-half-height)) 20px calc(-1 * var(--tq-consult-half-height));
    background: transparent;
}

.tq-footer-consult-inner {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
}

.tq-footer-consult-card {
    width: min(100%, 1020px);
    min-height: calc(var(--tq-consult-half-height) * 2);
    border-radius: 26px;
    overflow: hidden;
    position: relative;
    background: url('assets/img/chan-dung-hoc-sinh/thư viện.jpg') center/cover no-repeat;
    box-shadow: 0 20px 40px rgba(16, 52, 92, 0.3);
    color: #fff;
    padding: 24px 32px;
}

.tq-footer-consult-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(110deg, rgba(17, 64, 114, 0.93) 0%, rgba(28, 89, 153, 0.9) 52%, rgba(44, 121, 190, 0.82) 100%);
}

.tq-footer-consult-content {
    position: relative;
    z-index: 2;
    display: grid;
    grid-template-columns: 1fr auto;
    align-items: center;
    gap: 24px;
}

.tq-footer-consult-text>div {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 6px;
    flex-wrap: nowrap;
}

.tq-footer-consult-text small {
    display: inline-block;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    padding: 6px 12px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.18);
    margin-bottom: 0;
}

.tq-footer-consult-text h3 {
    font-family: 'Garamond', serif;
    font-size: clamp(30px, 2.6vw, 40px);
    margin: 0;
    color: #fff;
}

.tq-footer-consult-text p {
    font-size: 24px;
    line-height: 1.35;
    margin: 0;
    color: rgba(255, 255, 255, 0.96);
}

.tq-footer-consult-actions {
    text-align: right;
}

.tq-footer-consult-note {
    margin-top: 10px;
    font-size: 13px;
    color: rgba(255, 255, 255, 0.88);
}

.tq-footer-consult-btn {
    display: inline-block;
    min-width: 188px;
    padding: 13px 28px;
    border-radius: 999px;
    background: #fff;
    color: #1d4f87;
    font-weight: 700;
    font-size: 17px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.tq-footer-consult-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.22);
}

@media (max-width: 768px) {
    .tq-footer-consult-content {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .tq-footer-consult-text>div {
        justify-content: center;
        flex-wrap: wrap;
    }

    .tq-footer-consult-actions {
        text-align: center;
    }

    .tq-footer-consult-card {
        padding: 20px 18px;
    }

    .tq-footer-consult-text small {
        font-size: 11px;
        padding: 4px 10px;
    }

    .tq-footer-consult-text h3 {
        font-size: 22px;
    }

    .tq-footer-consult-text p {
        font-size: 14px;
    }

    .tq-footer-consult-btn {
        font-size: 15px;
        min-width: 150px;
        padding: 11px 22px;
    }

    .tq-footer-consult-note {
        font-size: 12px;
    }
}
</style>

<?php include 'includes/footer.php'; ?>