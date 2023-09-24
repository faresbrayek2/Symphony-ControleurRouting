# Symfony Controller and Routing Example

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

This repository contains a simple Symfony web application that demonstrates the usage of controllers and routing within the Symfony framework.

## Table of Contents

- [Features](#features)
- [Getting Started](#getting-started)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Features

- Symfony routing with annotated routes.
- Controllers for handling HTTP requests and generating responses.
- Integration of Twig templates for rendering dynamic HTML content.
- Examples of route redirection and parameter handling.

## Getting Started

Follow these instructions to get a copy of the project up and running on your local machine.

### Prerequisites

- [Composer](https://getcomposer.org/download/) installed.
- [Symfony CLI](https://symfony.com/download) installed (optional but recommended).

### Installation

1. Clone the repository to your local machine:
```
git clone https://github.com/faresbrayek2/Symphony-ControleurRouting.git
```

2. Navigate to the project directory:

```
cd Symphony-ControleurRouting
```

3. Install project dependencies using Composer:

```
composer install
```

### Usage

1. Start the Symfony development server:
```
symfony server:start
```

2. Access the application in your web browser:

- [http://127.0.0.1:8000/home](http://127.0.0.1:8000/home) for the home page.
- [http://127.0.0.1:8000/go-to-index](http://127.0.0.1:8000/go-to-index) to redirect to the home page.
- [http://127.0.0.1:8000/service/{name}](http://127.0.0.1:8000/service/{name}) to access the service page.
- [http://127.0.0.1:8000/service/show/{name}](http://127.0.0.1:8000/service/show/{name}) to show a service by name.

3. Explore the code to understand how controllers and routing work in Symfony.

### Contributing

Contributions to this project are welcome! Feel free to open issues or submit pull requests with improvements, bug fixes, or additional features.



