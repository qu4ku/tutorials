from django.db import models, permalink
from django.contrib.auth.models import User

import datetime
import tagging 
from taggingfields import TagField

class Post(models.Model):
	"""Post model."""
	STATUS_CHOICES = (
		(1, 'Draft'),
		(2, 'Public'),
	)
	title = models.CharField('title', max_length=200)
	slug = models.SlugField('slug', unique_for_date='publish')
	author = models.ForeignKey(User, blank=True, null=True)
	body = models.TextField('body', )
	tease = models.TextField('tease', blank=True, help_text='Concise text suggested. Does not appear in Rss Feed.')
	status = models.IntegerField('status', choices=STATUS_CHOICES, default=2)
	allow_comments = models.BooleanField('allow_comments', default=True)
	publish = models.DateTimeField('publish', default=datetime.datetime.now)
	created = models.DateTimeField('created', auto_now_add=True)
	modified = models.DateTimeField('modified', auto_now=True)
	categories = models.ManyToManyField(Category, blank=True)
	tags = TagField()
	objects = PublicManager()

	class Meta:
		verbose_name = 'post'
		verbose_name_plural = 'posts'
		db_table = 'blog_posts'
		ordering = ('-publish',)
		get_latest_by = 'publish'

	def __str__(self):
		return self.title


	def get_absolute_url(self):
		return ('blog_detail', None, {
			'year': self.publish.year,
			'month': self.publish.strftime('%b').lower(),
			'day': self.publish.day,
			'slub': self.slug,
		})

