# Dockerfile 是一个用来构建镜像的文本文件，文本内容包含了一条条构建镜像所需的指令和说明

# ARG: 构建参数，与ENV作用一致。不过作用域不一样。ARG设置的环境变量仅对Dockerfile内有效，
# 也就是说只有 docker build 的过程中有效，构建好的镜像内不存在此环境变量
# 构建命令 docker build 中可以用 --build-arg <参数名>=<值> 来覆盖
ARG NGINX_VERSION

# FROM: 定制的镜像都是基于FROM的镜像
FROM nginx:${NGINX_VERSION}

# RUN: 用于执行后面跟着的命令行命令，有以下两种格式
# |——  shell格式: RUN <命令行命令>
# |——  exec格式: RUN ["可执行文件", "参数1", "参数2"]
# |—————— 例如： RUN ["./test.php", "dev", "offline"] 等价于 RUN ./test.php dev offline
