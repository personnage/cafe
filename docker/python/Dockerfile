FROM python:3.5-slim
MAINTAINER Kirill Lyubaev <k.lyubaev@404-group.info>

ENV PYTHONUNBUFFERED 1

RUN mkdir /tests
RUN mkdir /reports
RUN mkdir /storage

RUN pip install -U \
    nose==1.3.7 \
    nose-cov==1.6 \
    chai==1.1.1 \
    selenium==2.53.6

ENV NOSE_PROCESSES -1
ENV NOSE_PROCESS_TIMEOUT 60

ADD ./tests/selenium /tests/
