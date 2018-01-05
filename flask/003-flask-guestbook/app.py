from flask import Flask, render_template, redirect, url_for, request
from flask_sqlalchemy import SQLAlchemy

app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///database.db'
# app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = False
db = SQLAlchemy(app)

class GuestBook(db.Model):
	id = db.Column(db.Integer, primary_key=True)
	name = db.Column(db.String(100))
	comment = db.Column(db.Text)

@app.route('/', methods=['GET', 'POST'])
def index():
	guests = GuestBook.query.all()

	# print(result)

	return render_template('index.html', guests=guests)

@app.route('/sign')
def sign():
	return render_template('sign.html')

@app.route('/submit_comment', methods=['POST'])
def submit_comment():
	name = request.form['name']
	comment = request.form['comment']

	signature = GuestBook(name=name, comment=comment)
	db.session.add(signature)
	db.session.commit()

	return redirect(url_for('index'))

if __name__ == '__main__':
	app.run(debug=True)

