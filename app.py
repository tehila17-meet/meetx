from flask import *

app = Flask(__name__)




@app.route('/',methods = ['GET','POST'])
def index():
	return render_template("index.html")


if '__main__' == __name__:
	app.run()