<?php
/**
 * Tag service.
 */

namespace App\Service;

use App\Entity\Tag;
use App\Repository\TagRepository;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Component\Pager\Pagination\PaginationInterface;

/**
 * Class TagService.
 */
class TagService
{
    /**
     * Tag repository.
     *
     * @var \App\Repository\TagRepository
     */
    private $tagRepository;

    /**
     * Paginator.
     *
     * @var \Knp\Component\Pager\PaginatorInterface
     */
    private $paginator;

    /**
     * CategoryService constructor.
     *
     * @param \App\Repository\TagRepository         $tagRepository Tag repository
     * @param \Knp\Component\Pager\PaginatorInterface $paginator          Paginator
     */
    public function __construct(TagRepository $tagRepository, PaginatorInterface $paginator)
    {
        $this->tagRepository = $tagRepository;
        $this->paginator = $paginator;
    }

    /**
     * Create paginated list.
     *
     * @param int $page Page number
     *
     * @return \Knp\Component\Pager\Pagination\PaginationInterface Paginated list
     */
    public function createPaginatedList(int $page): PaginationInterface
    {
        return $this->paginator->paginate(
            $this->tagRepository->queryAll(),
            $page,
            TagRepository::PAGINATOR_ITEMS_PER_PAGE
        );
    }

    /**
     * Find tag by Id.
     *
     * @param int $id Tag Id
     *
     * @return \App\Entity\Tag|null Tag entity
     */
    public function findOneById(int $id): ?Tag
    {
        return $this->tagRepository->findOneById($id);
    }
}