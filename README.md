
# Xpert Systems

Xpert System is a patient management system for counsellers, CBT Practitioners and other professionals who need to manage a caseload of clients.

An client management system for SME's. While adaptable to multiple industries, the initial concept of XPert Systems was to help counselors and other mental health practitioners manage their workload with a lightweight cloud based system.




## Features

- Unique Client page with editable data
- Appointments section to add, edit and remove appointments
- Visual display to see what stage of treatment each client is in
- easily tell if appointments have been invoiced
- Search function to find specific patient
- Create update and view each unique client (created from a modal)
- Edit client record from unique page
- Create update and view appointments specific to each client


## Installation

```bash
  composer Install
  # Setup your .env file to match your desired database
  php artisan key:generate
  # Run migration 
  php artisan migrate --seed
  # Have fun
  php artisan serve
```
    