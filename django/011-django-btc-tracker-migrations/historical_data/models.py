from django.db import models


class PriceHistory(models.Model):
	date = models.DateTimeField(auto_now_add=True)
	# Bitcoin to the moon (we need more digits)
	price = models.DecimalField(max_digits=8, decimal_places=2)
	volume = models.PositiveIntegerField()
	total_btc = models.PositiveIntegerField()
	market_cap = models.PositiveIntegerField(null=True)

