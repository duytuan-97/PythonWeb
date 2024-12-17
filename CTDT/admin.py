from django.contrib import admin

# Register your models here.
from .models import Post
from .models import box
from .models import standard
from .models import criterion
from .models import attest

from django_admin_listfilter_dropdown.filters import DropdownFilter, RelatedDropdownFilter, ChoiceDropdownFilter


admin.site.register(Post)
admin.site.register(box)
admin.site.register(standard)

#admin.site.register(criterion)
@admin.register(criterion)
class criterionAdmin(admin.ModelAdmin):   
    list_display = ('standard','title')
    ordering = ('standard',)
    list_filter = (
        #'standard',
        # for ordinary fields
        #('standard', DropdownFilter),
        # for choice fields
        #('standard', ChoiceDropdownFilter),
        # for related fields
        ('standard', RelatedDropdownFilter),
    )
    search_fields = ('title',)

#admin.site.register(attest)
@admin.register(attest)
class attestAdmin(admin.ModelAdmin):
    list_display = ('criterion','title', 'body', 'performer')
    list_filter = (
        #'criterion',
        # for ordinary fields
        #('criterion', DropdownFilter),
        # for choice fields
        #('criterion', ChoiceDropdownFilter),
        # for related fields
        ('criterion', RelatedDropdownFilter),
    )
    ordering = ( 'title',)
    search_fields = ('title', 'performer')