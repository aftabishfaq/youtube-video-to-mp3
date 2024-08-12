# YouTube to MP3 Converter

A Laravel-based web application that allows users to convert YouTube videos to MP3 files and download them.

## Features

- **Convert YouTube to MP3:** Easily convert YouTube videos to high-quality MP3 files.
- **Responsive Design:** The application is designed to work across various devices.

## Requirements

- **PHP 8.0 or higher**
- **Composer**
- **Laravel 9.x**
- **yt-dlp:** A command-line tool to download videos from YouTube.
- **FFmpeg:** A tool to handle multimedia files and streams.
- **WAMP Server:** For running the application on a Windows environment.

## Installation

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/your-username/youtube-to-mp3.git
   cd youtube-to-mp3

2. **Install Dependencies:**
    ```bash
   composer install
   
3. **Set Up Environment Variables:**
    ```bash
   cp .env.example .env
   php artisan key:generate

3. **Run the Application:**
    ```bash
   php artisan serve

## Usage
Enter the URL of the YouTube video you want to convert to MP3 in the input field on the homepage.
Click the "Convert" button.
The application will process the video and provide a download link for the MP3 file.
