FROM golang:alpine
MAINTAINER zhangcs 1114238502@qq.com
ADD . /app
WORKDIR /app
RUN sed -i 's/dl-cdn.alpinelinux.org/mirrors.ustc.edu.cn/g' /etc/apk/repositories \
    && apk update \
    && apk add upx \
    && CGO_ENABLED=0 go build -mod=vendor \
    && upx -9 user-service

FROM alpine
RUN  sed -i 's/dl-cdn.alpinelinux.org/mirrors.ustc.edu.cn/g' /etc/apk/repositories \
     && apk update \
     && apk add --no-cache ca-certificates \
     && apk add --no-cache tzdata \
     && ln -sf /usr/share/zoneinfo/Asia/Shanghai /etc/localtime \
     && echo "Asia/Shanghai" > /etc/timezone \
     && rm -rf /var/cache/apk/* /tmp/* /var/tmp/* $HOME/.cache
COPY --from=0 /app/user-service /
ENTRYPOINT [ "/user-service"]
