# -*- coding: utf-8 -*-
from __future__ import absolute_import

from chai import Chai

from selenium import webdriver
from selenium.webdriver.common.desired_capabilities import DesiredCapabilities

SELENIUM_HUB = 'http://hub:4444/wd/hub'

desired_cap = []
desired_cap.append({'browser': 'Chrome', 'browser_version': '33.0', 'os': 'OS X', 'os_version': 'Mavericks', 'resolution': '1600x1200'})
desired_cap.append({'browser': 'Firefox', 'browser_version': '27.0', 'os': 'OS X', 'os_version': 'Mavericks', 'resolution': '1600x1200'})

class ExampleTest(Chai):
    def setUp(self):
        super(ExampleTest, self).setUp()
        self.driver = webdriver.Remote(
            command_executor=SELENIUM_HUB,
            desired_capabilities=DesiredCapabilities.CHROME
        )

        self.driver = webdriver.Remote(
            command_executor=SELENIUM_HUB,
            desired_capabilities=DesiredCapabilities.FIREFOX
        )

    def test_foo(self):
        self.driver.get("http://www.allcafe.ru")
        assertEqual(self.driver.title, "Кафе и рестораны")
        self.driver.get_screenshot_as_file('/storage/test_foo.png')

    def test_bar(self):
        self.driver.get("http://www.allcafe.ru")
        assertNotEqual(self.driver.title, "Квартиры и комнаты")
        self.driver.get_screenshot_as_file('/storage/test_bar.png')

    def tearDown(self):
        super(ExampleTest, self).tearDown()
        self.driver.quit()

# this is just handy. If __main__, just run the tests in multiple processes
if __name__ == "__main__":
    nose.core.run(argv=["nosetests", "-vv",
                        "--processes", 8,
                        "--process-timeout", 180,
                        __file__],
                  plugins=[MultiProcess()])
