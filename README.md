# Laravel File Upload Component

This package provides a reusable file upload component for Laravel applications.

## Installation

1. Install the package via Composer:

   ```bash
   composer require sumandey7689/laravel-file-upload:dev-main


## Usage

### 1. Blade Component

The package provides a Blade component for integrating file uploads into your views. To use the file upload component, include it in your Blade views as follows:

```blade
<x-file-upload::file-upload id="fileInput" label="Upload File" accept="image/*" value="old('file')" />