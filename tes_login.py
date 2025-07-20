import time
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

LOGIN_URL = "http://127.0.0.1:8000/login"
SUCCESS_URL = "http://127.0.0.1:8000/customer/beranda"
USERNAME = "customer"
PASSWORD = "123456"

driver = webdriver.Chrome()

try:
    print(f"Membuka halaman login: {LOGIN_URL}")
    driver.get(LOGIN_URL)
    time.sleep(2)

    print("Mencari elemen form...")
    username_input = driver.find_element(By.NAME, "username")
    password_input = driver.find_element(By.NAME, "password")
    submit_button = driver.find_element(By.TAG_NAME, "button")

    print(f"Memasukkan username: {USERNAME}")
    username_input.send_keys(USERNAME)
    time.sleep(2)

    print("Memasukkan password...")
    password_input.send_keys(PASSWORD)
    time.sleep(2)

    print("Menekan tombol login...")
    submit_button.click()

    print(f"Menunggu redirect ke halaman beranda...")
    WebDriverWait(driver, 10).until(EC.url_to_be(SUCCESS_URL))

    current_url = driver.current_url
    print(f"URL saat ini: {current_url}")

    assert current_url == SUCCESS_URL
    print("\n✅ Tes Login Berhasil! Pengguna berhasil diarahkan ke halaman beranda.")

except Exception as e:
    print(f"\n❌ Tes Login Gagal. Error: {e}")

finally:
    time.sleep(5)
    print("Menutup browser...")
    driver.quit()