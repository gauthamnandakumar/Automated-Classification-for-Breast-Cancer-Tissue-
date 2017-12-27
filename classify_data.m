function[net,percentErrors,y1]= classify_data(input,target)
x = input;
t =target;
percentErrors=zeros(10,1);
for i=1:10
rng('default');
trainFcn = 'trainscg';  % Scaled conjugate gradient backpropagation
% Create a Pattern Recognition Network
hiddenLayerSize = 4;
 
net = patternnet(hiddenLayerSize, trainFcn);
% Setup Division of Data for Training, Validation, Testing
net.divideParam.trainRatio = 70/100;
net.divideParam.valRatio = 15/100;
net.divideParam.testRatio = 15/100;
net.trainParam.showWindow = 0;
net.trainParam.epochs=1000; 
% Train the Network
[net,tr] = train(net,x,t);

% Test the Network
y = net(x);
e = gsubtract(t,y);
y1=y;
performance = perform(net,t,y);
x1=y<2.6;x2=y>2.6;
y1(x1)=2;y1(x2)=4;
percentErrors=sum(y1~=t)/numel(t);
end
% View the Network
%view(net)



end
