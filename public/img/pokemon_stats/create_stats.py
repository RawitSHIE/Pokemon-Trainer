import pandas as pd
import requests as rq
import pygal

df_pokemon = pd.read_csv('../pokemon_web/Pokemon.csv')
for idx, data in df_pokemon.iterrows():
    r = rq.get('https://img.pokemondb.net/artwork/{0}.jpg'.format((data.Name).lower()))
    with open('{0}.jpg'.format((data.Name).lower()), 'wb') as f:
        f.write(r.content)