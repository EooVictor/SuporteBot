# 🤖 SuporteBot

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge\&logo=php\&logoColor=white)
![API](https://img.shields.io/badge/API-4A90E2?style=for-the-badge\&logo=fastapi\&logoColor=white)
![GPT](https://img.shields.io/badge/GPT-412991?style=for-the-badge&logo=openai&logoColor=white)



O **BaseBot** é uma **API de suporte técnico** desenvolvida para a **Radio Memory**, com o objetivo de centralizar a base de conhecimento de **erros, manutenções e integrações** dos sistemas **Studio** e **XWork**.
Toda a base de dados é fornecida ao GPT em formato de **texto estruturado**, permitindo que ele responda de forma precisa e consistente.

---

## 🚀 Funcionalidades

* Estrutura organizada com **Causa, Tratativa e Observações**
* Base de conhecimento documentada em texto no GPT
* API pronta para consultas de suporte
* Foco em erros, manutenções e integrações

---

## 📂 Estrutura do Projeto

```
📦 basebot
 ┣ 📜 .htaccess      # Configurações de acesso e segurança
 ┣ 📜 chat.php       # Endpoint principal da API
 ┣ 📜 config.php     # Configurações da API
 ┣ 📂 docs           # Guias de integração e manutenção
 ┗ 📜 README.md      # Documentação do projeto
```

---

## 🔧 Tecnologias Utilizadas

* **PHP** – Backend da API
* **GPT** – Armazena e processa a base de dados em texto

---

## ⚙️ Como Executar Localmente

1. Instale o **XAMPP** ou outro servidor Apache
2. Clone este repositório :

   ```bash
   git clone https://github.com/seu-usuario/basebot.git
   ```
3. Coloque os arquivos dentro da pasta `htdocs` do XAMPP
4. Configure as variáveis no arquivo **config.php**
5. Inicie o Apache no XAMPP
6. Acesse o endpoint da API pelo navegador ou client HTTP:

   ```
   http://localhost/basebot/chat.php
   ```

---

## 📌 Roadmap

* [x] Estrutura inicial da API
* [x] Base de conhecimento em texto treinada no GPT
* [ ] Dashboard para gerenciar registros de erros e integrações
* [ ] Deploy em servidor remoto (Railway / VPS)

---

## 👨‍💻 Autores

**Victor Raphael**
💼 Técnico de Suporte na [Radio Memory](https://www.radiomemory.com.br/)
🎓 Engenharia de Software - UNA
🚀 Entusiasta de **IA, automação e backend**

[![LinkedIn](https://img.shields.io/badge/-Victor_Raphael-0077B5?style=for-the-badge\&logo=linkedin\&logoColor=white)](https://www.linkedin.com/in/dev-victor-raphael)
[![GitHub](https://img.shields.io/badge/-EooVictor-181717?style=for-the-badge\&logo=github\&logoColor=white)](https://github.com/EooVictor)

**Deywid Souza**
💼 Técnico de Suporte na [Radio Memory](https://www.radiomemory.com.br/)
🎓 Ciência da computação - UNA
🚀 **IA, automação e backend**

[![LinkedIn](https://img.shields.io/badge/-Deywid_Souza-0077B5?style=for-the-badge\&logo=linkedin\&logoColor=white)](https://www.linkedin.com/in/deywid-souza/)
[![GitHub](https://img.shields.io/badge/-Deywid12-181717?style=for-the-badge\&logo=github\&logoColor=white)](https://github.com/Deywid12)


---
