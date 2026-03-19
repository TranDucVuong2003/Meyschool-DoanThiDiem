import re

file_path = 'c:/xampp/htdocs/doan-thi-diem/thong-tin-tuyen-sinh-tieu-hoc.php'

with open(file_path, 'r', encoding='utf-8') as f:
    html = f.read()

print("Original Tuyen sinh 2026-2027 . Khoi Tieu hoc in HTML?", 'Tuyen sinh 2026-2027 . Khoi Tieu hoc' in html)

