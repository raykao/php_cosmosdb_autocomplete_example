# PHP CosmosDB Autocompelte Example

This project demos how to create an "autocomplete" or "type ahead" input box search field using jQuery, PHP and CosmosDB.


## Build docker image

```:bash
docker build -t php-autocomplete-example .
```

## Update environment variable

You should store or manually pass in the CosmosDB URI string.  One of the easiest and repeatable ways is to pass it in from an enviroments variables file.

```bash

# example_env_vars file
COSMOSDB_URI=<cosmosdb_URI_string>
```

## Run docker image

You can now run the image and pass in the enviroment variable file to connect to your DB

```bash
docker run -it --env-file ./example_env_vars -p 9000:80 php-autocomplete-example
```

This will:
1. Run the container in an interactive terminal to see the apache output
2. Pass in the ```example_env_vars``` which contains the ```COSMOSDB_URI``` value
3. Map the host port ```9000``` to the container port ```80```
4. Run an instance (container) of the ```php-autocomplete-example``` image created from first step [above](#build-docker-image)