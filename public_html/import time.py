import time
from selenium import webdriver
from selenium.webdriver.common.by import By
driver=webdriver.Chrome()
driver.get("https://www.qsync.in")

driver.maximize_window()
driver.switch_to.window("abcd")
time.sleep(4)