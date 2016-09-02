# docker-silex

This is a simple _Hello World_ project written in [Silex](http://silex.sensiolabs.org/), running on [Docker](http://www.docker.com/).

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
