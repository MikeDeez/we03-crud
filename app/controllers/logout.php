<?php #  controllers/logout.php

# 1. Logic
Auth::kickout();

Auth::log_out();

# 2. REDIRECT
URL::redirect('login');