FROM ubuntu:16.04
RUN apt-get update && \
  apt-get install -y wget && \
  /bin/bash -c "$(wget -qO- https://apt.vapor.sh)" && \
  apt-get install -y vapor && \
  rm -rf /var/lib/apt/lists/*
WORKDIR /swiftcode
RUN git config --global user.email "you@example.com" \
  && git config --global user.name "Your Name" 
# && vapor new HelloVapor --verbose
# WORKDIR /swiftcode/HelloVapor
# RUN vapor build --verbose
# CMD [ "vapor", "run" ]
# CMD [ "swift", "run",  "Run", "serve", "-b", "0.0.0.0" ]
