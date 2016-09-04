# docker-silex

This is a simple project written in [Silex](http://silex.sensiolabs.org/), running on [Docker](http://www.docker.com/). It features two classic getting started examples - Hello, World! and Fizzbuzz. See the [endpoint examples](#Endpoints) for more details.

## Prerequisites

You will need [Docker Compose](https://docs.docker.com/compose/install) which is included with Docker on Mac and Windows systems. Other systems please refer to the Docker Compose install docs.

## Usage


### Start/stop the server
Run the following command to start the server:

```
docker-compose up -d --build
```

Note the `-d` flag which backgrounds the PHP dev server.

To stop the server run:

```
docker-compose down
```

### Logs

To tail the logs while the server is running use the following command:

```
docker logs -f docker-silex 
```

## Endpoints

### Hello, World

Request:
```
GET /hello/$name
```
Params:

`$name` - The value which will be interpolated to the string "Hello `$name`!"

Example:
```
GET /hello/world
```
Returns:

```
{
    message: "Hello world!"
}
```

### Fizzbuzz

Request:
```
GET /hello/$number
```
Params:

`$number` - Must be an integer between 1 and 100. Non integers or values outside this range will return a 400 error.

Example:
```
GET /fizzbuzz/15
```
Returns:

```
{
    number: "15",
    fizz: true,
    buzz: true
}
```
