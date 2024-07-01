import os
import openai  # Importo libreria de openai
from dotenv import load_dotenv

load_dotenv()  # Cargar variables de entorno desde el archivo .env

api_key = os.getenv('OPENAI_API_KEY')  # Llamo mi clave de chat, la llamo ya que si la pongo acá X podría tener esa clave
openai.api_key = api_key  # Configuro la biblioteca con mi clave

modelo = "text-embedding-ada-002"
prompt = "¿Cuál es la capitad de francia?"

respuesta = openai.Completion.create(
    engine=modelo,
    prompt=prompt,
    n=1
)

print(respuesta)