function [coeff,score,latent] = visualize(X)
[coeff,score,latent] = pca(X);
scatter3(score(:,1),score(:,2),score(:,3))
axis equal
xlabel('1st Principal Component')
ylabel('2nd Principal Component')
zlabel('3rd Principal Component')
title(' Visualization of Data');
end
