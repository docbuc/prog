# Datei: java/Dockerfile
FROM openjdk:8
WORKDIR /src
RUN chown www-data:www-data /src
USER www-data
ENV JSOUP_VER 1.11.3

RUN curl -SL https://jsoup.org/packages/jsoup-$JSOUP_VER.jar \
  -o jsoup-$JSOUP_VER.jar
COPY printheadlines.java /src/
RUN javac -verbose -cp /src/jsoup-$JSOUP_VER.jar:. \
  printheadlines.java
CMD java -cp jsoup-$JSOUP_VER.jar:. printheadlines

