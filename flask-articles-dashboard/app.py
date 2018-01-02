from flask import Flask, render_template
from data import Articles

app = Flask(__name__)


article_list = Articles()

@app.route('/')
def index():
	return render_template('home.html')

@app.route('/about')
def about():
	return render_template('about.html')

@app.route('/articles')
def articles():
	return render_template('articles.html', articles=article_list)

@app.route('/article/<string:id>/')
def article(id):
	return render_template('article.html', id=id)

if __name__ == '__main__':
	# debug=True : no need to restart the server every single time
	app.run(debug=True)
