from django.contrib import admin

# Register your models here.
from .models import Post
from .models import box
from .models import standard
from .models import criterion
from .models import attest

admin.site.register(Post)
admin.site.register(box)
admin.site.register(standard)
admin.site.register(criterion)
admin.site.register(attest)