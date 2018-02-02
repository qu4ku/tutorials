from .models import Article
import pandas as pd

df = pd.read_json('../article.json')
print(df)
