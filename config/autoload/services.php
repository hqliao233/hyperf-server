<?php

// 这里是msg项目的配置
return [
    'enable'    => [
        // 开启服务发现
        'discovery' => TRUE,
        // 开启服务注册
        'register'  => TRUE,
    ],
    'consumers' => [],//服务消费端配置
    'providers' => [],
    // 注册中心配置
    'drivers'   => [
        'consul' => [
            // 不知道写什么ip 通过docker容器命令行 ipaddr 查看 ip
            // 这里需要写consul局域网的ip
            'uri'   => 'http://172.17.0.6:8500',
            'token' => '',
        ],
    ]
];