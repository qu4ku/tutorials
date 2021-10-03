import speech_recognition as sr
from time import ctime
import webbrowser
import time 
import os 
import playsound
import random
from gtts import gTTS


r = sr.Recognizer()

def record_audio(ask=False):
	if ask:
		speak(ask)
	with sr.Microphone() as source:
		audio = r.listen(source)
		voice_data = ''
		try:
			voice_data = r.recognize_google(audio)
			print(voice_data)
		except sr.UnknownValueError:
			speak('Sorry, I did not get that')
		except sr.RequestError:
			speak('Sorry, my speech service is down')
		return voice_data

def speak(audio_string):
	tts = gTTS(text=audio_string, lang='en')
	r = random.randint(1, 1000000)
	audio_file = 'audio-' + str(r) + '.mp3'
	tts.save(audio_file)
	playsound.playsound(audio_file)
	print(audio_string)
	os.remove(audio_file)


def respond(voice_data):
	if 'what is your name' in voice_data:
		speak('My name is none.')
	if 'what time is it' in voice_data:
		speak(ctime())
	if 'search' in voice_data:
		search = record_audio('What do you want to search for?')
		url = 'https://google.com/search?q=' + search
		webbrowser.get().open(url)
		speak('here is what I found for ' + search)
	if 'find location' in voice_data:
		search = record_audio('What location do you want to search for?')
		url = 'https://google.nl/maps/place/' + search + '&amp;'
		webbrowser.get().open(url)
		speak('Here is the location of  ' + search)
	if 'exit' in voice_data:
		exit()

time.sleep(1)
speak('How can I help you')

while True:
	voice_data = record_audio()
	respond(voice_data)