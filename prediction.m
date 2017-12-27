function [pre]=prediction(net,v1,v2,v3,v4,v5,v6,v7,v8,v9)
inputs=[v1,v2,v3,v4,v5,v6,v7,v8,v9]';
pre = net(inputs);
if pre>2.6
    pre=4;
else pre = 2;
end
