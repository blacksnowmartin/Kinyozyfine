### Frontend Files:
#### HTML Files:
- `index.html`: Main entry point for the application.
- `login.html`: Login page for users.
- `register.html`: Registration page for new users.
- `dashboard.html`: Dashboard for logged-in users to manage appointments.
- `stylist_profile.html`: Profile page for individual stylists/barbers.
- `booking.html`: Page for clients to book appointments.

#### CSS Files:
- `styles.css`: Stylesheet for custom styling across the application.
- `bootstrap.min.css`: Bootstrap framework for responsive design.

#### JavaScript Files:
- `script.js`: JavaScript code for client-side interactions and form validations.
- `axios.min.js`: Axios library for making HTTP requests to the backend.
w
#### Image Files:
- Various images for logos, stylist profiles, etc.

### Backend Files:
#### Server Setup:
- `server.js` or `app.js`: Entry point for the backend server.
- `package.json`: File listing dependencies and scripts.
- `package-lock.json`: Dependency lock file.

#### Routing:
- `routes/auth.js`: Routes for user authentication (login, registration, logout).
- `routes/appointments.js`: Routes for managing appointments (booking, cancellation, retrieval).
- `routes/payments.js`: Routes for handling payment requests and callbacks.

#### Database Integration:
- `models/User.js`: Database model for user accounts.
- `models/Appointment.js`: Database model for appointment data.
- `models/Stylist.js`: Database model for stylist/barber profiles.

#### Middleware:
- `middleware/auth.js`: Middleware for authenticating user requests.
- `middleware/validate.js`: Middleware for validating request data.

#### Payment Integration:
- `helpers/mpesa.js`: Helper functions for integrating with the MPESA checkout API.
- `config/mpesaConfig.js`: Configuration file for MPESA API credentials.

#### Error Handling:
- `middleware/errorHandler.js`: Middleware for handling errors and sending appropriate responses.

#### Database Setup:
- `config/db.js`: Configuration file for connecting to the database.
- `seed.js`: Script for seeding initial data into the database.

#### Environment Variables:
- `.env`: File for storing environment variables such as database credentials and API keys. 
