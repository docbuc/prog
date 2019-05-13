# Datei: prog/nodejs/Dockerfile (docbuc/printheadlines:node)
FROM node:12
WORKDIR /src
RUN chown node:node /src
USER node
COPY package.json package-lock.json /src/
RUN npm i
COPY printheadlines.js /src/
CMD [ "node", "printheadlines.js" ]

