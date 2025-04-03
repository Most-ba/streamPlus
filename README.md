# StreamPlus - Multi-Step Registration System

A Symfony-based multi-step registration system for a fictional streaming service called StreamPlus. This application demonstrates a robust implementation of a multi-step form with validation, session management, and database persistence.

## Features

- **Multi-Step Registration Process**:
  - Step 1: User Information & Subscription Selection
  - Step 2: Address Information with Country-Specific Validation
  - Step 3: Payment Information (for premium subscriptions)
  - Step 4: Confirmation and Submission

- **Advanced Form Handling**:
  - Form validation with custom constraints
  - Country-specific address validation
  - Credit card validation using Luhn algorithm
  - Expiration date validation

- **User Experience Enhancements**:
  - Progress indicator showing current step
  - Client-side validation for immediate feedback
  - Form field formatting (credit card numbers, expiration dates)
  - Ability to navigate back to previous steps
  - Session-based data persistence between steps

- **Security Features**:
  - CSRF protection on all forms
  - Secure handling of sensitive payment information
  - Data validation on both client and server sides

## Technical Implementation

- **Framework**: Symfony 5.x
- **Frontend**: Bootstrap 5, JavaScript
- **Database**: Doctrine ORM with MySQL/PostgreSQL
- **Form Handling**: Symfony Form Component
- **Validation**: Symfony Validator Component

## Getting Started

### Prerequisites
- PHP 8.0 or higher
- Composer
- MySQL or PostgreSQL
- Symfony CLI (optional but recommended)
- Docker and Docker Compose

### Installation
1. Clone the repository:
   ```
   git clone https://github.com/yourusername/streamplus.git
   cd streamplus
   ```

2. Install dependencies:
   ```
   composer install
   ```

3. Configure your database in `.env` file:
   ```
   DATABASE_URL=mysql://root:root@127.0.0.1:3306/streamplus
   ```

4. Create database and run migrations:
   ```
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate
   ```

### Running the Application
1. Start the database and phpMyAdmin using Docker:
   ```
   docker-compose up -d
   ```
   This will start MySQL and phpMyAdmin containers as defined in the compose.yaml file.

2. After starting the Docker containers, make sure to run the migration to set up your database schema:
   ```
   php bin/console doctrine:migrations:migrate
   ```

3. Access phpMyAdmin at:
   ```
   http://localhost:81/index.php
   ```
   Use username: root and password: root to log in.

4. Start the Symfony development server:
   ```
   symfony server:start
   ```
   or
   ```
   php -S localhost:8000 -t public/
   ```

5. Access the application in your browser at `http://localhost:8000/onboarding`
