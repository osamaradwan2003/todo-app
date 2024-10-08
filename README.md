# Todo App

A simple, efficient Todo App built with **React** and **Tailwind CSS** for the frontend and **Laravel** for the backend. This app allows users to create, update, and delete tasks, with a clean and responsive user interface.

## Table of Contents
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Getting Started](#getting-started)
- [Frontend Installation](#frontend-installation)
- [Backend Installation](#backend-installation)
- [Usage](#usage)
- [Folder Structure](#folder-structure)
- [Contributing](#contributing)
- [License](#license)



## Features

- **Add Todos:** Create new tasks with a simple form.
- **Edit Todos:** Modify existing tasks directly within the app.
- **Delete Todos:** Remove tasks that are no longer needed.
- **Mark Completed:** Easily mark tasks as done or undone.
- **Responsive Design:** The app is fully responsive, making it easy to use on any device.
- **Lightweight and Fast:** Minimalist interface powered by React and Tailwind CSS for fast performance.
- **Backend API:** All tasks are managed through a Laravel backend for data persistence.

## Technologies Used

- **Frontend:**
  - **React**: JavaScript library for building user interfaces.
  - **Tailwind CSS**: A utility-first CSS framework for styling the app.
  - **JavaScript**: Core language for building interactivity.
  - **Vite**: Development tool for faster and leaner builds.

- **Backend:**
  - **Laravel**: A PHP framework for building web applications.
  - **MySQL**: Database management system for data storage.
  - **API**: RESTful API for handling CRUD operations.

## Getting Started

To get a local copy up and running, follow these simple steps:

### Prerequisites

You need to have the following installed:

- Node.js (v14 or higher) for the frontend
- npm (comes with Node.js)
- PHP (v8.1 or higher) for the backend
- Composer for managing PHP dependencies
- MySQL (for database)

### Frontend Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/osamaradwan2003/todo-app.git
   cd todo-app
   ```

2. **Install frontend dependencies**:
   Navigate to the `frontend` directory (if you have a separate folder for the frontend) and run:
   ```bash
   npm install
   ```

3. **Run the frontend app**:
   Start the development server:
   ```bash
   npm run dev
   ```

   The app will be available at `http://localhost:5173/`.

### Backend Installation

1. **Clone the Laravel backend**:
   If the Laravel backend is in a separate folder (e.g., `backend`), navigate to it:
   ```bash
   cd backend
   ```

2. **Install backend dependencies**:
   Run the following command to install the required packages:
   ```bash
   composer install
   ```

3. **Set up the environment**:
   - Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update the `.env` file with your database credentials.

4. **Generate the application key**:
   ```bash
   php artisan key:generate
   ```

5. **Run migrations**:
   To set up your database schema:
   ```bash
   php artisan migrate
   ```

6. **Run the backend server**:
   Start the Laravel development server:
   ```bash
   php artisan serve
   ```

   The backend will be available at `http://localhost:8000/`.

## Usage

- **Frontend**:
  - **Create a task**: Type a task into the input field and click "Add Todo" or press Enter.
  - **Edit a task**: Click on a task to modify it.
  - **Mark a task complete**: Click on the checkbox to toggle the completion state.
  - **Delete a task**: Click the "X" button next to a task to remove it.

- **Backend**:
  - The API endpoints for managing todos will be available under `http://localhost:8000/api/todos`.

## Folder Structure

Here is the folder structure of the project:

```
.
├── frontend                  # Frontend React application
│   ├── public
│   │   └── index.html
│   ├── src
│   │   ├── components
│   │   │   ├── TodoItem.jsx
│   │   │   └── TodoList.jsx
│   │   ├── App.jsx
│   │   ├── index.css
│   │   └── main.jsx
│   ├── tailwind.config.js
│   ├── vite.config.js
│   ├── package.json
│   └── README.md
├── backend                   # Backend Laravel application
│   ├── app
│   ├── database
│   ├── routes
│   ├── .env.example
│   ├── artisan
│   ├── composer.json
│   └── README.md
├── LICENSE
└── README.md
```
