<?php
/**
 * Redirect root requests to the CodeIgniter 4 public directory.
 * Prevents 403 Forbidden errors on shared hosting environments like InfinityFree.
 */
header('Location: public/');
exit();
