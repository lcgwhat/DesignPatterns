<?php


namespace DesignPatterns\Creational\Builder;

//建造者模式和抽象工厂模式很像，总体上，
//建造者模式仅仅只比抽象工厂模式多了一个“导演类”的角色。
//与抽象工厂模式相比，建造者模式一般用来创建更为复杂的对象，
//因为对象的创建过程更为复杂，因此将对象的创建过程独立出来组成一个新的类 —— 导演类。
//也就是说，抽像工厂模式是将对象的全部创建过程封装在工厂类中，由工厂类向客户端提供最终的产品；
//而建造者模式中，建造者类一般只提供产品类中各个组件的建造，而将完整建造过程交付给导演类。
//由导演类负责将各个组件按照特定的规则组建为产品，然后将组建好的产品交付给客户端。
/**
 * Director 是建造者模式的一部分，它知道建造者接口并通过建造者构建复杂对象。
 *
 * 可以通过依赖注入建造者的方式构造任何复杂对象
 */
class Director
{
    /**
     * “导演”并不知道具体实现细节
     *
     * @param BuilderInterface $builder
     *
     * @return Parts\Vehicle
     */
    public function build(BuilderInterface $builder)
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}