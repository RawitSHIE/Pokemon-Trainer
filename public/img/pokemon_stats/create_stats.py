import pandas as pd
import requests as rq
import pygal

df_pokemon = pd.read_csv('../pokemon_web/Pokemon.csv')
for idx, data in df_pokemon.iterrows():
    radar_chart = pygal.Radar()
    radar_chart.title = data.Name