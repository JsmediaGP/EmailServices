# Laravel API for Sending Emails to Users

This Laravel project provides an API for sending emails to multiple recipients using Gmail SMTP. The API allows you to specify the recipients and the body of the email, and it also saves the email details into the database for future reference.

## Prerequisites

- PHP >= 8.0
- Laravel >= 8.x
- Composer
- Gmail account with SMTP access enabled

## Getting Started

1. Clone the repository to your local machine:

 
   git clone https://github.com/JsmediaGP/EmailServices.git


2. Navigate to the project directory:

 
   cd EmailServices


3. Install the project dependencies using Composer:


   composer install


4. Copy the `.env.example` file to `.env`:

   
   cp .env.example .env
  

5. Configure the `.env` file with your Gmail SMTP settings:

   MAIL_MAILER=smtp
   MAIL_HOST=smtp.googlemail.com
   MAIL_PORT=465
   MAIL_USERNAME=your@gmail.com
   MAIL_PASSWORD=your-gmail-password
   MAIL_ENCRYPTION=tls


6. Generate an application key:


   php artisan key:generate
 

7. Set up your database connection in the `.env` file:

 
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
  

8. Run migrations to create the necessary database tables:

  
   php artisan migrate
  

9. Start the development server:

 
   php artisan serve
   
## Using the API

### Sending Emails

Send a POST request to the `/api//send-email` endpoint with the following parameters:

- `recipients` (array): An array of recipient email addresses.
- `body` (text): The body/content of the email.

Example request:

```json
POST /api/send-email
Content-Type: application/json

{
  "recipients": ["recipient1@example.com", "recipient2@example.com"],
  "body": "This is the content of the email."
}
```

The API will send the email to the specified recipients using Gmail SMTP and save the email details in the database.

### Retrieving Sent Emails

You can retrieve a list of sent emails by sending a GET request to the `/api/sent-emails` endpoint. This endpoint will return a list of sent emails stored in the database.

Example request:

```json
GET /api/all-mails
```

Example response:
```json

"status": "success",
    "data": [
        {
            "id": 6,
            "recipient_email": "recipient1@example.com",
            "email_template": "Hey ma we are glad to welcome you.",
            "time_sent": "2023-08-28 12:51:11",
            "created_at": "2023-08-28T12:51:11.000000Z",
            "updated_at": "2023-08-28T12:51:11.000000Z"
        }
    ]



```

## Conclusion

This Laravel project provides a convenient API for sending emails to multiple recipients using Gmail SMTP. It also includes functionality to store sent emails in the database for record-keeping. Feel free to customize and extend the project to suit your specific needs.
