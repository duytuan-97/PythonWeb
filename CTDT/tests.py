from django.test import TestCase, SimpleTestCase

# Create your tests here.

# Test xem kết quả trả về khi gọi đến hàm đó có trả về kq 200 hay không
class SimpleTest(SimpleTestCase):
   def test_home_page_status(self):
       response = self.client.get('/CTDT')
       self.assertEquals(response.status_code, 200)