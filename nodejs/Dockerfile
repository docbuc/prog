# Datei: nodejs/Dockerfile
FROM node:10
WORKDIR /src
RUN chown node:node /src
USER node
COPY package.json package-lock.json /src/
RUN npm i
COPY printheadlines.js /src/
CMD [ "node", "printheadlines.js" ]

