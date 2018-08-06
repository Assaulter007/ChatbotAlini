# -*- coding: utf-8 -*-
from flask import Flask, render_template, request
from chatterbot import ChatBot
from chatterbot.trainers import ChatterBotCorpusTrainer

app = Flask(__name__)

bot = ChatBot(
    'Alini',
	storage_adapter='chatterbot.storage.SQLStorageAdapter',
	logic_adapters=[
		{
			'import_path' :  'chatterbot.logic.BestMatch',
			'response_selection_method' :  'chatterbot.response_selection.get_random_response'
		},
		'chatterbot.logic.MathematicalEvaluation',
		'chatterbot.logic.TimeLogicAdapter'
	],
	tie_breaking_method='random_response'
)

bot.set_trainer(ChatterBotCorpusTrainer)

bot.train("./corpus/")

@app.route("/")
def home():
    return render_template("index.html")

@app.route("/get")
def get_bot_response():
    quest = request.args.get('msg')
    response = bot.get_response(quest)
    if float(response.confidence) > 0.7:
        return str(response)
    else:
        return str('Isso não está na minha base de dados')

if __name__ == "__main__":
    app.run()
