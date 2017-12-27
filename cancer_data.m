function [pre,percentError]=cancer_data(v1,v2,v3,v4,v5,v6,v7,v8,v9)
fullURL = 'https://archive.ics.uci.edu/ml/machine-learning-databases/breast-cancer-wisconsin/breast-cancer-wisconsin.data';
str = urlread(fullURL);
C =(strsplit(str,{'\n',','}))';
C(end)=[];
s=[];
D=(reshape(C,11,[]))';
for i=1:size(D,1)
    for j=1:size(D,2)
        if strcmp(D{i,j},'?')
            s=[s i];
        end
    end
end
D(s,:)=[];
final=[];
for i=1:size(D,1)
    for j=1:size(D,2)
        final(i,j)=str2num(D{i,j});
    end
end
[coeff,score,latent] = visualize(final(:,2:10));
input = (final(:,2:10))';
target = (final(:,11))';

[net,percentError,y]= classify_data(input,target);
set1=(y==2);
set2=(y==4);
a1=score(set1,1);
b1=score(set1,2);
figure;
scatter(a1,b1,'r');
hold on;
a2=score(set2,1);
b2=score(set2,2);
scatter(a2,b2,'b');

%Testing the system
[pre]=prediction(net,v1,v2,v3,v4,v5,v6,v7,v8,v9);
if pre ==2
    pre='Benign';
else pre='Malignant';
end
end