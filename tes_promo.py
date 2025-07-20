import time
import os
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.chrome.options import Options
import tempfile

LOGIN_URL = "http://127.0.0.1:8000/login"
SUCCESS_URL = "http://127.0.0.1:8000/karyawan/promo"
USERNAME = "karyawan"
PASSWORD = "123456" 

chrome_options = Options()
temp_profile_dir = tempfile.mkdtemp()

chrome_options.add_argument(f"--user-data-dir={temp_profile_dir}")
prefs = {"credentials_enable_service": False, "profile.password_manager_enabled": False}
chrome_options.add_experimental_option("prefs", prefs)
chrome_options.add_experimental_option("excludeSwitches", ["enable-automation"])

chrome_options.add_argument("--disable-features=AutofillServerCommunication")
chrome_options.add_argument("--user-data-dir=/tmp/selenium")
chrome_options.add_argument("--incognito")
driver = webdriver.Chrome(options=chrome_options)

NAMA_PROMO = "Promo Spesial Akhir Pekan"
DESKRIPSI = "Nikmati diskon khusus untuk semua treatment di akhir pekan."
HARGA = "165000"
DURASI = "60"
FOTO_PATH = os.path.abspath("paket1.png") 



try:
    print("Membuka halaman login...")
    driver.get(LOGIN_URL)
    driver.find_element(By.NAME, "username").send_keys(USERNAME)
    driver.find_element(By.NAME, "password").send_keys(PASSWORD)
    driver.find_element(By.TAG_NAME, "button").click()
    print("Login berhasil, menunggu redirect ke dashboard karyawan...")
    WebDriverWait(driver, 10).until(EC.url_contains("/karyawan/dashboard"))

    
    print("Menavigasi ke halaman promo...")
    promo_link = driver.find_element(By.XPATH, "//a[contains(@href, '/karyawan/promo')]")
    promo_link.click()
    WebDriverWait(driver, 10).until(EC.url_to_be(SUCCESS_URL))
    print("Berhasil masuk ke halaman daftar promo.")
    time.sleep(3)

    print("Menekan tombol 'Tambah Promo'...")
    tambah_button = driver.find_element(By.XPATH, "//a[contains(@href, '/karyawan/promo/create')]")
    tambah_button.click()
    WebDriverWait(driver, 10).until(EC.url_contains("/karyawan/promo/create"))
    print("Berhasil masuk ke halaman tambah promo.")
    time.sleep(3)

    print("Mengisi form promo...")
    driver.find_element(By.NAME, "nama_promo").send_keys(NAMA_PROMO)
    driver.find_element(By.NAME, "deskripsi").send_keys(DESKRIPSI)
    driver.find_element(By.NAME, "harga").send_keys(HARGA)
    driver.find_element(By.NAME, "durasi").send_keys(DURASI)
    
    print(f"Mengunggah foto dari: {FOTO_PATH}")
    driver.find_element(By.NAME, "foto").send_keys(FOTO_PATH)
    time.sleep(3)

    print("Menekan tombol 'Simpan'...")
    simpan_button = driver.find_element(By.XPATH, "//button[@type='submit' and contains(text(), 'Simpan')]")
    simpan_button.click()

    print("Menunggu redirect kembali ke halaman daftar promo...")
    WebDriverWait(driver, 10).until(EC.url_to_be(SUCCESS_URL))
    
    current_url = driver.current_url
    print(f"URL saat ini: {current_url}")
    
    assert current_url == SUCCESS_URL
    print("\n✅ Tes Tambah Promo Berhasil! Karyawan berhasil membuat promo baru.")

except Exception as e:
    print(f"\n❌ Tes Tambah Promo Gagal. Error: {e}")

finally:
    time.sleep(5)
    print("Menutup browser...")
    driver.quit()