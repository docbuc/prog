FROM ruby:2
RUN gem install feedjira httparty
WORKDIR /src
COPY printheadlines.rb /src/
USER www-data
CMD [ "ruby", "printheadlines.rb" ]
