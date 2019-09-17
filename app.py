from flask import *


app = Flask(__name__)





# @app.route('/',methods = ['GET','POST'])
# def index():
# 	return render_template("index.html")
@app.route('/',methods = ['GET','POST'])
def home():
	return render_template("home.html")

@app.route('/calendar')
def calendar():
	return render_template('calendar.html')

if '__main__' == __name__:
	app.run()