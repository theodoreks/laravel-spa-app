import time
import os
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.chrome.options import Options


LOGIN_URL = "http://127.0.0.1:8000/login"
SUCCESS_URL = "http://127.0.0.1:8000/karyawan/inventory"
USERNAME = "karyawan"
PASSWORD = "123456" 


TANGGAL = "2025-07-20"
KODE_BARANG = "BRG-001"
MEREK = "Sariayu"
JUMLAH = "10"
NAMA_PRODUK = "Lulur Body Scrub"
BERAT = "250g"
HARGA = "35000"
DESKRIPSI = "Lulur untuk mencerahkan kulit."


chrome_options = Options()
prefs = {"credentials_enable_service": False, "profile.password_manager_enabled": False}
chrome_options.add_experimental_option("prefs", prefs)
chrome_options.add_experimental_option("excludeSwitches", ["enable-automation"])
chrome_options.add_argument("--incognito")


driver = webdriver.Chrome(options=chrome_options)

try:
    print("Membuka halaman login...")
    driver.get(LOGIN_URL)
    driver.find_element(By.NAME, "username").send_keys(USERNAME)
    driver.find_element(By.NAME, "password").send_keys(PASSWORD)
    driver.find_element(By.TAG_NAME, "button").click()
    print("Login berhasil, menunggu redirect ke dashboard karyawan...")
    WebDriverWait(driver, 10).until(EC.url_contains("/karyawan/dashboard"))

    print("Membuka menu Laporan...")
    laporan_dropdown = driver.find_element(By.XPATH, "//button[contains(., 'Laporan')]")
    laporan_dropdown.click()
    time.sleep(3) 
    
    print("Menekan link Inventory Barang...")
    inventory_link = driver.find_element(By.XPATH, "//a[contains(@href, '/karyawan/inventory')]")
    inventory_link.click()
    WebDriverWait(driver, 10).until(EC.url_to_be(SUCCESS_URL))
    print("Berhasil masuk ke halaman daftar inventory.")
    time.sleep(3)

    print("Menekan tombol 'Tambah'...")
    tambah_button = driver.find_element(By.XPATH, "//a[contains(@href, '/karyawan/inventory/create')]")
    tambah_button.click()
    WebDriverWait(driver, 10).until(EC.url_contains("/karyawan/inventory/create"))
    print("Berhasil masuk ke halaman tambah inventory.")
    time.sleep(3)

    print("Mengisi form inventory...")
    driver.find_element(By.NAME, "tanggal").send_keys(TANGGAL)
    driver.find_element(By.NAME, "kode_barang").send_keys(KODE_BARANG)
    driver.find_element(By.NAME, "tipe").send_keys(MEREK) 
    driver.find_element(By.NAME, "jumlah_masuk").send_keys(JUMLAH) 
    driver.find_element(By.NAME, "nama_produk").send_keys(NAMA_PRODUK)
    driver.find_element(By.NAME, "berat_satuan").send_keys(BERAT) 
    driver.find_element(By.NAME, "harga_perolehan").send_keys(HARGA) 
    driver.find_element(By.NAME, "deskripsi").send_keys(DESKRIPSI)
    time.sleep(3)

    print("Menekan tombol 'Simpan'...")
    simpan_button = driver.find_element(By.XPATH, "//button[@type='submit' and contains(text(), 'Simpan')]")
    simpan_button.click()


    print("Menunggu redirect kembali ke halaman daftar inventory...")
    WebDriverWait(driver, 10).until(EC.url_to_be(SUCCESS_URL))
    
    current_url = driver.current_url
    print(f"URL saat ini: {current_url}")
    
    assert current_url == SUCCESS_URL
    print("\n✅ Tes Tambah Inventory Berhasil! Karyawan berhasil menambahkan item baru.")

except Exception as e:
    print(f"\n❌ Tes Tambah Inventory Gagal. Error: {e}")

finally:
    time.sleep(5)
    print("Menutup browser...")
    driver.quit()