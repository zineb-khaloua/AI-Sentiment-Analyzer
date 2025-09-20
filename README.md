**AI Sentiment Analyzer**

This project is a Laravel web application that analyzes user comments using Hugging Face Sentiment Analysis API. It stores the analyzed results in a database and displays them in a dashboard with summary cards and a trend line chart.This project is a Laravel web application that analyzes user comments using Hugging Face Sentiment Analysis API. It stores the analyzed results in a database and displays them in a dashboard with summary cards and a trend line chart.

**Features**

📝 Submit a comment and analyze sentiment (Positive, Negative, Neutral).

📊 Dashboard with:

Positive comments (green card)

Negative comments (red card)

Neutral comments (yellow card)

Total comments (blue card)

📈 Line chart showing sentiment trends over time.

💾 Store all results in the database.

⚡ Real-time alert after analysis using SweetAlert.

**Tech Stack**

Backend: Laravel

Frontend: Blade, Bootstrap, Chart.js, SweetAlert

Database: MySQL 

AI API: Hugging Face Inference AP

**Installation**

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
  - Go to http://localhost:8000/dashboard
  - Enter a comment in the text area → click Analyze Sentiment
  - See result in a SweetAlert popup
  - Navigate to the Dashboard to explore statistics and charts
