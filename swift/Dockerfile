FROM swift:5.2

WORKDIR /tmp
RUN git clone https://github.com/vapor/toolbox.git && \
    cd toolbox && \
    make install

RUN rm -rf /tmp/*
WORKDIR /swiftcode

RUN git config --global user.email "you@example.com" \
 && git config --global user.name  "Your Name"
