AI Sentiment Analyzer
AI Sentiment Analyzer is a Laravel-based web application that uses the Hugging Face Transformers API to analyze the sentiment of user comments.
If you own a store, sell a product, or provide a service, this tool helps you quickly understand customer opinions by categorizing comments as positive, negative, or neutral.

Features

📝 Submit a comment and analyze sentiment (Positive, Negative, Neutral).

📊 Dashboard with:

Positive comments (green card)

Negative comments (red card)

Neutral comments (yellow card)

Total comments (blue card)

📈 Line chart showing sentiment trends over time.

💾 Store all results in the database.

⚡ Real-time alert after analysis using SweetAlert.

Tech Stack

Backend: Laravel

Frontend: Blade, Bootstrap, Chart.js, SweetAlert

Database: MySQL 

AI API: Hugging Face Inference AP

⚙️ Installation

Clone the repo

git clone https://github.com/zineb-khaloua/AI-Sentiment-Analyzer.git
cd ai-sentiment-analyzer


Install dependencies

composer install 
- npm install && npm run dev


Configure .env file

- HUGGINGFACE_API_KEY=your_huggingface_api_key


Run migrations

 - php artisan migrate


Start server

- php artisan serve

Usage
  Go to http://localhost:8000/dashboard
  Enter a comment in the text area → click Analyze Sentiment
  See result in a SweetAlert popup
  Navigate to the Dashboard to explore statistics and charts
