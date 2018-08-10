docker build -t docbuc/python-legacy .
docker run -v ${PWD}:/src/out docbuc/python-legacy
